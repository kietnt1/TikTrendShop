import {createBrowserRouter, createRoutesFromElements,Route} from "react-router-dom";
import App from '../App';
import ProductRouter from './Product-router';
import Home from "../pages/home";
import DefaultLayout from "../layouts/layout-default";
export default createBrowserRouter(
    createRoutesFromElements(
      <Route path="/" element={<App/>}>
          <Route index element={<DefaultLayout> <Home/> </DefaultLayout> }/>
          <Route path="/product/*" element={<DefaultLayout><ProductRouter/></DefaultLayout>}/>
          <Route path="/profile/*" element={<ProductRouter/>}/>
      </Route>
    )
);