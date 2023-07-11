import { getCurrentSubdomain } from "@/@commons/ValidateDomain";
import menuVerticalLandLord from "@/navigation/vertical/LandLord";
import menuVertialTenant from "@/navigation/vertical/Tenant";

export const getVerticalGeneral = ()=>{
     if(getCurrentSubdomain()){
          return menuVertialTenant;
     }else{
          return  menuVerticalLandLord;
     }
}