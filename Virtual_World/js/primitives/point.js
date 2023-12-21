class Point {
    constructor(x, y) {
        this.x = x;
        this.y = y;
    }

    // this is a method that checks if two points are equal
    equals(point) {
        return this.x == point.x && this.y == point.y;
    }

    draw(ctx, size = 18, color = "black") {
        const rad = size / 2; // radius
        ctx.beginPath();
        ctx.fillStyle = color;

        // this is the circle
        ctx.arc(this.x, this.y, rad, 0, 2 * Math.PI);

        ctx.fill();

    }
}