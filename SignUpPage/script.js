function handleInput (e) {
    if(e.value.length >= 1) {
        e.parentElement.classList.add("hasInput");
    } else {
        e.parentElement.classList.remove("hasInput");
    }
}

// API Request

const apiRequest = 'https://api.unsplash.com/search/photos?query=purple+gradient&client_id=YzjxVYJjrKDtx6czKCwgx0_5D6N5p_GXFqie6P121cw';

const imageArea = document.querySelector('.image');

function displayImage(imageUrl) {
  imageArea.src = imageUrl;
}


async function getNewImage() {

  let randomNumber = Math.floor(Math.random() * 30);

  return fetch(apiRequest)
  .then((response) => response.json())
  .then((data) => {

    let allImages = data.results[randomNumber];
    return allImages.urls.regular;

  });

}

setInterval(async () => {
  const imageUrl = await getNewImage();
  displayImage(imageUrl);
}, 2000);