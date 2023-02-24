import React from "react";

class Page extends React.Component {
    constructor(props) {
        super(props);

        this.state = {
            Content: "<p></p>"
        };
    }

    componentDidMount() {
        this.loadViewableData();
    }

    async loadViewableData() {
        const data = await this.props.fetchViewableData();
        if(data) {
            let parsedContent = "<p>Test</p>";
            if(data.Content) {
                parsedContent = data.Content.replace(/\[image(.*)\]/, '<img $1 />');
            }
            this.setState({
                Content: parsedContent
            });
        }
    }

    render() {
        return (
            <div>
                <div dangerouslySetInnerHTML={{__html: this.state.Content}}></div>
            </div>
        );
    }
}

export default Page;
