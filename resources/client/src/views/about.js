// HomePage.js
import React from 'react';
import { Helmet } from 'react-helmet';
import Layout from './layout';

function About() {
    return (
        <Layout>
            <Helmet>
                <title>Trang liên hệ</title>
            </Helmet>
            <p>Trang liên hệ</p>
        </Layout>
    );
}

export default About;