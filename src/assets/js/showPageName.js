const title = document.getElementById('offcanvasRightLabel'),
    metaData = document.querySelector('meta[name="page-name"]');

title.innerHTML = metaData.getAttribute('content');