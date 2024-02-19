import { Search as IconSearch } from "react-feather"

export default function Search(){
    return <div className="py-2 ps-12 pe-4 flex-start-center max-h-12 bg-[#eeeeee] rounded-full relative">
        <IconSearch className="absolute left-4 w-5 text-gray-400"/>
        <input className="bg-inherit flex-1 border-none outline-none" type="text" placeholder="Start typing to search.."/>
    </div>
}