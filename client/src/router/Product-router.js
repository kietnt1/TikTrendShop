import { Route, Routes} from "react-router-dom";
import Products from "../pages/products";

export default function ProductRouter() {
    return (
        <Routes>
                <Route exact  path=""  element={<Products/>}/>
        </Routes>
    )
}