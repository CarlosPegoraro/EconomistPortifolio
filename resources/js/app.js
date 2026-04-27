import '../css/app.css';

const initHeroChart = () => {
  const canvas = document.getElementById('hero-chart-canvas');
  if (!canvas) return;

  const ctx = canvas.getContext('2d');
  let width;
  let height;
  let points = [];

  const resize = () => {
    width = canvas.parentElement.clientWidth;
    height = canvas.parentElement.clientHeight;
    canvas.width = width;
    canvas.height = height;

    points = new Array(70).fill(0).map((_, index) => ({
      x: (width / 69) * index,
      y: height / 2,
    }));
  };

  const randomWalk = (value, min, max, step) => {
    const movement = (Math.random() - 0.5) * step;
    return Math.min(max, Math.max(min, value + movement));
  };

  const draw = () => {
    ctx.clearRect(0, 0, width, height);

    const gradient = ctx.createLinearGradient(0, 0, width, height);
    gradient.addColorStop(0, 'rgba(0, 156, 59, 0.55)');
    gradient.addColorStop(0.5, 'rgba(255, 223, 0, 0.45)');
    gradient.addColorStop(1, 'rgba(0, 39, 118, 0.55)');

    points = points.map((point, index) => {
      if (index === 0) return { ...point, y: randomWalk(point.y, 50, height - 50, 35) };

      const previous = points[index - 1];
      return {
        x: point.x,
        y: randomWalk(previous.y, 40, height - 40, 45),
      };
    });

    ctx.beginPath();
    ctx.moveTo(points[0].x, points[0].y);

    for (let i = 1; i < points.length - 2; i += 1) {
      const xc = (points[i].x + points[i + 1].x) / 2;
      const yc = (points[i].y + points[i + 1].y) / 2;
      ctx.quadraticCurveTo(points[i].x, points[i].y, xc, yc);
    }

    ctx.strokeStyle = gradient;
    ctx.lineWidth = 3;
    ctx.shadowColor = 'rgba(0, 156, 59, 0.35)';
    ctx.shadowBlur = 16;
    ctx.stroke();

    requestAnimationFrame(draw);
  };

  resize();
  window.addEventListener('resize', resize);
  draw();
};

window.addEventListener('DOMContentLoaded', () => {
  initHeroChart();
});
