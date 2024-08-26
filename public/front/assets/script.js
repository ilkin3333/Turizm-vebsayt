document.addEventListener('DOMContentLoaded', () => {

    const menuIcon = document.querySelector('.navbarmenuicon');
    const altNavbar = document.querySelector('.altnavbar');
    const locationFromSelect = document.getElementById('location-from');
    const locationToSelect = document.getElementById('location-to');
    const dateFromInput = document.getElementById('date-from');
    const dateToInput = document.getElementById('date-to');
    const priceResultDiv = document.getElementById('price-result');
    const form = document.getElementById('search-form');

    menuIcon.addEventListener('click', () => {
        altNavbar.classList.toggle('active');
    });

    var swiper = new Swiper(".mySwiper", {
        pagination: {
            el: ".swiper-pagination",
            type: "fraction",
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

    const fetchCountries = async () => {
        try {
            const response = await fetch('https://restcountries.com/v3.1/all');
            const data = await response.json();
            const countries = data.map(country => ({
                code: country.cca2,
                name: country.name.common
            }));
            populateSelect(locationFromSelect, countries);
            populateSelect(locationToSelect, countries);
        } catch (error) {
            console.error('Ülkeler yüklenemedi:', error);
        }
    };

    const populateSelect = (selectElement, countries) => {
        selectElement.innerHTML = '<option value="">Seçin</option>';
        countries.forEach(country => {
            const option = document.createElement('option');
            option.value = country.code;
            option.textContent = country.name;
            selectElement.appendChild(option);
        });
    };

    const calculatePrice = async () => {
        const from = locationFromSelect.value;
        const to = locationToSelect.value;
        const dateFrom = dateFromInput.value;
        const dateTo = dateToInput.value;

        if (from && to && dateFrom && dateTo) {
            try {
                const response = await fetch(`https://partners.api.skyscanner.net/apiservices/browsequotes/v1.0/{country}/{currency}/{locale}/flights/{dateFrom}/{dateTo}`);
                if (!response.ok) {
                    throw new Error(`HTTP error! Status: ${response.status}`);
                }
                const data = await response.json();
                if (data.price) {
                    priceResultDiv.textContent = `Ortalama qiymət: ${data.price} TL`;
                } else {
                    priceResultDiv.textContent = 'Qiymət məlumatı tapılmadı.';
                }
            } catch (error) {
                priceResultDiv.textContent = 'Qiymət məlumatı tapılmadı.';
                console.error('Xəta:', error);
                alert('Qiymət məlumatı tapılmadı. Xahiş olunur təkrar yoxlayın');
            }
        } else {
            priceResultDiv.textContent = 'Xahiş olunur bütün məlumatları doldurun';
        }
    };

    fetchCountries();

    form.addEventListener('submit', (e) => {
        e.preventDefault();
        calculatePrice();
    });
});

// bilet alisi hissesi bitdi



// slayd kismi basladi
document.addEventListener('DOMContentLoaded', () => {
    const categories = document.querySelectorAll('.category');
    const slides = document.querySelectorAll('.slide');
    const sliderWrapper = document.querySelector('.slider-wrapper');
    let currentIndex = 0;

    const updateSlider = () => {
        sliderWrapper.style.transform = `translateX(-${currentIndex * 100}%)`;
        categories.forEach(cat => cat.classList.remove('category-active'));
        categories[currentIndex].classList.add('category-active');
    };

    document.querySelector('.next').addEventListener('click', () => {
        if (currentIndex < slides.length - 1) {
            currentIndex++;
            updateSlider();
        }
    });

    document.querySelector('.prev').addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
            updateSlider();
        }
    });

    categories.forEach(cat => {
        cat.addEventListener('click', () => {
            currentIndex = parseInt(cat.getAttribute('data-index'));
            updateSlider();
        });
    });

    updateSlider();
});
// slayd kismi bitdi
//favorite icon start

document.addEventListener('DOMContentLoaded', function() {
    const favoriteIcons = document.querySelectorAll('.favorite-icon');

    favoriteIcons.forEach(icon => {
        icon.addEventListener('click', function() {
            // `favorited` sınıfını ekle veya çıkar
            this.classList.toggle('favorited');
        });
    });
});

// favorite icon finish

function addClickListener(hotelId, infoId) {
    document.getElementById(hotelId).addEventListener('click', function() {
        // Kategoriye özel info div'lerini gizle
        const categoryIndex = document.querySelector(`.slide-content .tour#${hotelId}`).closest('.slide').getAttribute('data-index');
        const allInfos = document.querySelectorAll(`.slide[data-index="${categoryIndex}"] .info`);
        allInfos.forEach(info => info.style.display = 'none');

        // Tıklanan otelin ait olduğu info div'ini göster
        const info = document.getElementById(infoId);
        info.style.display = 'block';
    });
}

function closeInfo(id) {
    document.getElementById(id).style.display = 'none';
}

// Her otel için tıklama dinleyicilerini ekleyin
// Kategori 1
addClickListener('hotel1-cat1', 'info-hotel1-cat1');
addClickListener('hotel2-cat1', 'info-hotel2-cat1');
addClickListener('hotel3-cat1', 'info-hotel3-cat1');
addClickListener('hotel4-cat1', 'info-hotel4-cat1');

// Kategori 2
addClickListener('hotel1-cat2', 'info-hotel1-cat2');
addClickListener('hotel2-cat2', 'info-hotel2-cat2');
addClickListener('hotel3-cat2', 'info-hotel3-cat2');
addClickListener('hotel4-cat2', 'info-hotel4-cat2');

// Kategori 3
addClickListener('hotel1-cat3', 'info-hotel1-cat3');
addClickListener('hotel2-cat3', 'info-hotel2-cat3');
addClickListener('hotel3-cat3', 'info-hotel3-cat3');
addClickListener('hotel4-cat3', 'info-hotel4-cat3');

//kategori 4
addClickListener('hotel1-cat4', 'info-hotel1-cat4');
addClickListener('hotel2-cat4', 'info-hotel2-cat4');
addClickListener('hotel3-cat4', 'info-hotel3-cat4');
addClickListener('hotel4-cat4', 'info-hotel4-cat4');

//kategori 5
addClickListener('hotel1-cat5', 'info-hotel1-cat5');
addClickListener('hotel2-cat5', 'info-hotel2-cat5');
addClickListener('hotel3-cat5', 'info-hotel3-cat5');
addClickListener('hotel4-cat5', 'info-hotel4-cat5');

// ikinci slayder
var swiper = new Swiper(".mySwiper", {
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});


