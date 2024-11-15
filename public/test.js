
    
    const canvas = document.getElementById('mapCanvas');
    const ctx = canvas.getContext('2d');
    canvas.width = 2000;
    canvas.height = 1200;

    
    fetch('/taiwan.json') // 替換為實際的 GeoJSON 檔案路徑
        .then(response => response.json())
        .then(data => {
            // 繪製地圖
            drawMap(data);
            console.log("GeoJSON Data:", data);
        })
        .catch(error => console.error('無法載入 GeoJSON 資料:', error));

    
        function drawMap(geoData) {
            geoData.features.forEach(feature => {
                // 檢查幾何類型
                if (feature.geometry.type === 'MultiPolygon') {
                    // 如果是 MultiPolygon，則遍歷每個 Polygon
                    feature.geometry.coordinates.forEach(polygon => {
                        polygon.forEach(ring => {
                            ctx.beginPath();
                            ring.forEach(([x, y], index) => {
                                const [scaledX, scaledY] = scaleCoordinates(x, y);
                                if (index === 0) {
                                    ctx.moveTo(scaledX, scaledY);
                                } else {
                                    ctx.lineTo(scaledX, scaledY);
                                }
                            });
                            ctx.closePath();
                            ctx.fillStyle = '#87CEEB';
                            ctx.fill();
                            ctx.strokeStyle = '#333';
                            ctx.stroke();
                        });
                    });
                } else if (feature.geometry.type === 'Polygon') {
                    // 處理單個 Polygon
                    feature.geometry.coordinates.forEach(ring => {
                        ctx.beginPath();
                        ring.forEach(([x, y], index) => {
                            const [scaledX, scaledY] = scaleCoordinates(x, y);
                            if (index === 0) {
                                ctx.moveTo(scaledX, scaledY);
                            } else {
                                ctx.lineTo(scaledX, scaledY);
                            }
                        });
                        ctx.closePath();
                        ctx.fillStyle = '#87CEEB';
                        ctx.fill();
                        ctx.strokeStyle = '#333';
                        ctx.stroke();
                    });
                }
            });
        }
        

    function scaleCoordinates(x, y) {
        const scaleFactor = 10; // 縮放係數
        const offsetX = 400; // 畫布水平中心偏移
        const offsetY = 250; // 畫布垂直中心偏移
        return [x * scaleFactor + offsetX, -y * scaleFactor + offsetY];
    }