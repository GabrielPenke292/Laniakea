class Graph{
    constructor(points = [], segments = []){
        this.points = points;
        this.segments = segments;
    }

    addPoint(point) {
        this.points.push(point);
    }

    // look if the point given already exists in the graph
    containsPoint(point) {
        return this.points.find( (p) => p.equals(point) );
    }

    tryAddPoint(point) {
        if ( !this.containsPoint(point) ) {
            this.addPoint(point);
            return true;
        }
        return false;
    }

    /**
     * this makes a graph from a list of points and segments
     * both of loops are useds to make sure that the points and segments are in the graph
     * @param {*} ctx 
     */
    draw(ctx){
        for (const seg of this.segments){
            seg.draw(ctx);
        }

        for (const point of this.points){
            point.draw(ctx);
        }
    }

}