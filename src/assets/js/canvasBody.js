const canvasBody = document.getElementById('canvas-body'),
    nav = canvasBody.querySelector('.nav'),
    metaData = document.querySelector('meta[name="page-name"]');

if (fineEquals(nav)) {

} else if(fineEquals(nav.querySelector('.nav-item .dropdown-menu'))) {
    nav.querySelector(".nav-item a[data-bs-toggle='dropdown']").classList.add('active');
} else {
    console.log('Something is wrong...');
}

function fineEquals(father) {
    try {
        for (const list of father.children) {
            const webPage = list.querySelector('.nav-link') ?? list.querySelector('.dropdown-item');
        
            if (webPage.innerHTML === metaData.getAttribute('content')) {
                webPage.classList.add('active');
                webPage.classList.add('disabled');
                webPage.setAttribute('aria-current', 'page');
                return true;
            }
        }
    } catch (error) {
        return false;
    }

    return false;
}