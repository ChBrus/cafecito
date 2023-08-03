const canvasBody = document.getElementById('canvas-body'),
    nav = canvasBody.querySelector('.nav'),
    metaData = document.querySelector('meta[name="page-name"]');

for (const list of nav.children) {
    const webPage = list.querySelector('.nav-link');
    
    if (webPage.innerHTML === metaData.getAttribute('content')) {
        webPage.classList.add('active');
        webPage.classList.add('disabled');
        webPage.setAttribute('aria-current', 'page');
    }
}