class AdminRendelesekModel{
    #rendelesekTomb = [];
    
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
                this.#rendelesekTomb = data;
                myCallBack(this.#rendelesekTomb);
            })
            .catch((error) => {
                console.error('Error:', error);
            });
    }
}

export default AdminRendelesekModel;