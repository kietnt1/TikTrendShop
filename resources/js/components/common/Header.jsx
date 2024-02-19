import {Search, Button} from "@/components";

export default function Header(){ 
    return (<header className="px-[15px] bg-white">
      <nav className="row col-2 py-4">
          <div className="flex-center">
              <div className="">
                <img src=""/>
              </div>
              <Search />
              <div>
                 <Button> Home </Button>
              </div>
          </div>
          <div>

          </div>
      </nav>
    </header>)
}