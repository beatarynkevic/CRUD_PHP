
document.querySelector('[type=button]').addEventListener('click', () => {
    const count = document.querySelector('#count').value;
    axios.post(uriPAth + 'api/create/', {
        count: count;
    })
        .then(function (response) {
            console.log(response);
        })
        .catch(function (error) {
            console.log(error);
        });
    console.log('klip');
})