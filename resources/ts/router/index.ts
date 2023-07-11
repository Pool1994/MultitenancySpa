import { setupLayouts } from "virtual:generated-layouts";
import { createRouter, createWebHistory } from "vue-router";
import { isUserLoggedIn } from "./utils";
import routes from "virtual:generated-pages";
import { canNavigate } from "@layouts/plugins/casl";
import { getCurrentSubdomain } from "@/@commons/ValidateDomain";

const subdomain = getCurrentSubdomain();
console.log(routes)

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: "/",
      redirect: (to) => {
        console.log(to)
        const userData = JSON.parse(localStorage.getItem("userData") || "{}");
        const userRole = userData && userData.role ? userData.role : null;

        if (userRole === "admin") return { name: "dashboards-analytics" };
        if (userRole === "client") return { name: "access-control" };

        return { name: subdomain ? 'login':"admin-login", query: to.query };
      },
    },
    ...setupLayouts(routes),
  ],
});

// Docs: https://router.vuejs.org/guide/advanced/navigation-guards.html#global-before-guards
router.beforeEach((to) => {
  const isLoggedIn = isUserLoggedIn();
  if (canNavigate(to)) {
    if (to.meta.redirectIfLoggedIn && isLoggedIn) return "/";
  } else {
    if (isLoggedIn) return { name: subdomain ? 'not-authorized':"admin-not-authorized" };
    else
      return {
        name: subdomain ? 'login':"admin-login",
        query: { to: to.name !== "index" ? to.fullPath : undefined },
      };
  }
});

export default router;
