class Router {
    constructor() {
        this.routes = [];
    }

    register(route, controller, action) {
        this.routes.push({ "route": route, "controller": controller, "action": action });
    }

    dispatch(uri) {
        for (let route of this.routes) {
            if (uri == route['route']) {
                let controller = new route['controller']();
                let action = route['action'];
                controller[action]();
                return;
            }
        }
    }

}

export default Router;