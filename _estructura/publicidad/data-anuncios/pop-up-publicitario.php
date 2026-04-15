
    <div id="imagePopup" aria-modal="true" role="dialog">
        <span class="closeBtn" title="Cerrar">&times;</span>
        <img src="" alt="Publicidad" id="popupImage" />
    </div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const images = [
            'https://alayag82.kesug.com/turismo-norte-espana/cantabria/playadeostende/img/playa-de-ostende-castro-urdiales-cantabria.jpg',
            'https://via.placeholder.com/600x400?text=Publicidad+2',
            'https://via.placeholder.com/600x400?text=Publicidad+3'
        ];

        let currentImageIndex = 0;
        const popup = document.getElementById('imagePopup');
        const popupImage = document.getElementById('popupImage');
        const closeBtn = popup.querySelector('.closeBtn');

        function showPopup() {
            popupImage.src = images[currentImageIndex];
            popup.style.display = 'block';

            currentImageIndex = (currentImageIndex + 1) % images.length;
        }

        closeBtn.onclick = () => {
            popup.style.display = 'none';
        };

        // Mostrar popup por primera vez al cargar la página
        showPopup();

        // Mostrar popup cada 5 segundos
        setInterval(showPopup, 5000);
    });
</script>

<style>
    #imagePopup {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        max-width: 90vw;
        max-height: 80vh;
        background: white;
        border-radius: 8px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
        z-index: 9999;
        padding: 10px;
    }

    #imagePopup img {
        width: 100%;
        height: auto;
        border-radius: 6px;
        display: block;
    }

    #imagePopup .closeBtn {
        position: absolute;
        top: 6px;
        right: 10px;
        font-size: 28px;
        cursor: pointer;
        color: #333;
        font-weight: bold;
        user-select: none;
    }
</style>