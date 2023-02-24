import React from "react";
import Page from "./components/Page.jsx";

class App extends React.Component {


    async fetchViewableData() {


        try {
            var container = document.getElementById('react-entry');

            container.classList.add("loading");
            const path = container.getAttribute("data-baseurl");
            const response = await fetch(path + "fetchViewableData", {
                method: "GET",
                headers: { "Content-Type": "application/json" }
            });
            const body = await response.text();
            console.log(body);
            const result = JSON.parse(body);
            return result;
        } catch (error) {
            console.log(error);
        }
    }


    render() {
        return (
            <div>
                <Page fetchViewableData={this.fetchViewableData}/>
            </div>
        );
    }
}

export default App;
