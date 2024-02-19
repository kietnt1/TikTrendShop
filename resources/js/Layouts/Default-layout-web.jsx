import { Header } from "@/components/common";

export default function DefaultLayoutWeb({children}){
    return (
        <div>
            <Header/>
            <div className="container">
                {children}
            </div>
        </div>
    )
}