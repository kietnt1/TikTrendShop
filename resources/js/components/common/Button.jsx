export default function Button({type, children,className , ...option}){
   
    return <button className={'bg-inherit outline-none flex-center'} type={type} {...option}>
        {children}
    </button>;
}