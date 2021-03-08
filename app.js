
document.querySelector('[type=button]').addEventListener('click', () => {
    axios.post(uriPAth + 'api/create/', {
        firstName: 'Fred',
        lastName: 'Flintstone'
    })
        .then(function (response) {
            console.log(response);
        })
        .catch(function (error) {
            console.log(error);
        });
    console.log('klip');
})