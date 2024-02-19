// Import React và các thành phần cần thiết
import React from 'react';
import Header from './header';
import Footer from './footer';
import NavigationLeft from './navigation-left';
import ChatRight from './chat-right';
import Search from './search';

// Import các tệp JavaScript vào đây
import '../../public/js/plugin.js';
import '%PUBLIC_URL%/js/lightbox';
import '%PUBLIC_URL%/js/scripts';
import $ from 'jquery';


// Định nghĩa component Layout
const Layout = ({ children, pageTitle }) => {
    return (
        <html>
            <head>
                <meta charset="UTF-8" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                <meta http-equiv="X-UA-Compatible" content="ie=edge" />
                <link rel="stylesheet" href="css/themify-icons.css" />
                <link rel="stylesheet" href="css/feather.css" />

                {/* Favicon icon */}
                <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png" />

                {/* Custom Stylesheet */}
                <link rel="stylesheet" href="css/style.css" />
                <link rel="stylesheet" href="css/emoji.css" />
                <link rel="stylesheet" href="css/lightbox.css" />

                <title>{pageTitle}</title>
            </head>
            <body className="color-theme-blue mont-font">
                {/* <div className="preloader"></div> */}

                <div>
                    <Header />
                    <NavigationLeft />
                    {children}
                    <ChatRight />
                    <Footer />
                    <Search />
                </div>

                {/* Các file script và JS khác */}

                <script src="js/plugin.js"></script>
                <script src="js/lightbox.js"></script>
                <script src="js/scripts.js"></script>
            </body>
        </html>
    );
};

// Xuất component Layout để có thể sử dụng ở các component khác
export default Layout;
