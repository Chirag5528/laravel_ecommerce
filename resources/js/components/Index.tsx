import React, {Fragment} from 'react'
import { render } from "react-dom"
import Header from './Header'
import Body from './Body'
import Footer from './Footer'
const App = () => {
    return (
        <Fragment>
            <Header />
            <Body />
            <Footer />
        </Fragment>
    );
}

export default App;

if (document.getElementById('app')) {
    render(<App />, document.getElementById('app'));
}
