class AdminModellekModel{
    #modellekTomb = [];
    
    constructor(){

    }

    adatBe(vegpont, myCallBack) {
        fetch(vegpont, {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
            }
        })
            .then((response) => response.json())
            .then((data) => {
                this.#modellekTomb = data;
                myCallBack(this.#modellekTomb);
            })
            .catch((error) => {
                console.error('Error:', error);
            });
    }
}

export default AdminModellekModel;