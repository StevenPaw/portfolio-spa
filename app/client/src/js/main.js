import GLightbox from "glightbox";
import React from "react";
import ReactDOM from "react-dom/client";
import App from "./react/App.jsx";

const container = document.getElementById('react-entry');
const root = ReactDOM.createRoot(container);

root.render(
    <App container={container}/>
);
