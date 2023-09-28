<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countdown Pemilu</title>
    <style>
        body {
            background-color: black;
            color: white;
            font-family: "Digital-7", sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        @font-face {
            font-family: "Digital-7";
            src: url("digital-7.ttf") format("truetype");
        }

        @font-face {
            font-family: "texgyreadventor";
            src: url("texgyreadventor-italic.ttf") format("truetype");
        }
        ul {
            color: red;
            font: bold;
        }
        h1, #countdown {
            font-size: 48px;
        }

        footer {
            background-color: red; 
            color: white;
            text-align: center;
            padding: 5px 0;
            position: fixed;
            left: 0;
            right: 0;
            bottom: 0;
        }

      
        #loading-screen {
            font-family: "texgyreadventor";
            src: url("texgyreadventor-italic.ttf") format("truetype");
            font-size: 36px;
        }

        
        @media (max-width: 768px) {
            h1, #countdown {
                font-size: 24px; 
            }
            #loading-screen {
                font-size: 24px; 
            }
            footer {
                font-size: 16px; 
            }
        }
    </style>
</head>
<body oncontextmenu="showContextMenu(event)">
<div id="loading-screen">AFWAN GIBRAN MUHAMMAD</div>
<script>
    function showContextMenu(event) {
        event.preventDefault(); 

        const contextMenu = document.createElement("div");
        contextMenu.innerHTML = `
            <ul>
                <a>JANGAN MALING KODE !!!<a>
            </ul>
        `;
        contextMenu.style.position = "absolute";
        contextMenu.style.left = `${event.clientX}px`;
        contextMenu.style.top = `${event.clientY}px`;
        contextMenu.style.border = "1px solid black";
        contextMenu.style.padding = "5px";
        contextMenu.style.zIndex = "1000";
        
        document.body.appendChild(contextMenu);

        // Menghilangkan menu kontekstual kustom saat diklik di luar menu
        document.addEventListener("click", function hideContextMenu() {
            contextMenu.remove();
            document.removeEventListener("click", hideContextMenu);
        });
    }
</script>


    <script>
        
        setTimeout(function () {
            const loadingScreen = document.getElementById("loading-screen");
            loadingScreen.style.display = "none";
            const content = document.createElement("div");
            content.innerHTML = `
                <h1>Countdown Pemilu 2024</h1>
                <div id="countdown">Countdown</div>
                <footer>Created by AFWAN GIBRAN</footer>
            `;
            document.body.appendChild(content);

            
            const targetDate = new Date("2024-02-14T00:00:00").getTime();

            
            const countdown = setInterval(function () {
                const now = new Date().getTime();
                const timeLeft = targetDate - now;

                if (timeLeft <= 0) {
                    clearInterval(countdown);
                    document.getElementById("countdown").innerHTML = "Waktu Habis!";
                } else {
                    const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
                    const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
                    const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

                    const countdownText = `${days} hari ${hours} jam ${minutes} menit ${seconds} detik`;
                    document.getElementById("countdown").innerHTML = countdownText;
                }
            }, 1000);
        }, 2000); 
        
    </script>
    
</body>
</html>
