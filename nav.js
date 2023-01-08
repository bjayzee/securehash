document.querySelectorAll('.nav-link').forEach(link => {
    if(link.href === window.location.href){
        link.setAttribute('aria-current', 'page')
    }
})


document.querySelectorAll('.nav-link-a').forEach(link => {
    if(link.href === window.location.href){
        link.setAttribute('aria-current', 'page')
    }
})