import { Outlet } from "react-router-dom";
import { Footer, Header } from "../components/common";

export default function DefaultLayout(){
    return <>
        <Header/>
        <article>
            <Outlet/>
        </article>
        <Footer/>
    </>
}