import { BrowserRouter, Routes,Route } from "react-router-dom";
import Home from "../pages/Home";
export default function Router(){
    return(
        <BrowserRouter>
            <Routes>
                <Route path="Libracium/public/" element={<Home/>}/>
                <Route path="Libracium/public/Home" element={<Home/>}/>
            </Routes>
        </BrowserRouter>
    )
      
}