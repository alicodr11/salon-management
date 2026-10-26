document.addEventListener('DOMContentLoaded', function () {
const menuButton = document.querySelector('.menu-toggle');
const navigation = document.querySelector('.main-navigation');

```
if (!menuButton || !navigation) {
    return;
}

menuButton.addEventListener('click', function () {
    const isOpen = navigation.classList.toggle('is-open');

    menuButton.setAttribute('aria-expanded', String(isOpen));

    menuButton.innerHTML = isOpen
        ? '<i class="bi bi-x-lg"></i>'
        : '<i class="bi bi-list"></i>';
});

navigation.querySelectorAll('a').forEach(function (link) {
    link.addEventListener('click', function () {
        navigation.classList.remove('is-open');
        menuButton.setAttribute('aria-expanded', 'false');
        menuButton.innerHTML = '<i class="bi bi-list"></i>';
    });
});

window.addEventListener('resize', function () {
    if (window.innerWidth > 760) {
        navigation.classList.remove('is-open');
        menuButton.setAttribute('aria-expanded', 'false');
        menuButton.innerHTML = '<i class="bi bi-list"></i>';
    }
});
```

});
