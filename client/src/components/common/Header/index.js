// import thư viện đã tải
import classNames from "classnames/bind";

// các file từ setup
import header from "./header.module.scss";

const cx = classNames.bind(header);
export default function Header(){
    return (<header className={cx('wrapper')}>
        <h1>Header</h1>
    </header>)
}