class Model {

    constructor() {
        this.values = [];
    }

    addValue(name, data) {
        this.values.push({ "name": name, "data": data });
    }

    removeValue(name) {
        this.values = this.values.filter((value) => value["name"] != name);
    }

    post(location) {
        return new Promise((resolve) => {
            let request = new XMLHttpRequest();
            let form = new FormData();

            for (let value of this.values) {
                form.append(value["name"], value["data"]);
            }

            request.onreadystatechange = () => {
                if (request.status == 200 && request.readyState == 4) {
                    let response = request.responseText;
                    resolve(response);
                }
            };

            request.open("POST", location, true);
            request.send(form);
        });
    }
}

export default Model;