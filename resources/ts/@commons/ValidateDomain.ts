export function getCurrentSubdomain() {
  const host = window.location.host;
  const path = host.split('.');
  if(path.length === 3){
     if(path[0] === "www"){
          return false;
     }else{
          return true;
     }
  }else{
     return false;
  }
}