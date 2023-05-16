class AdminRendelesekView{
    #elem;
    constructor(elem, szuloElem){
        this.#elem = elem;
        szuloElem.append(`
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    ${elem.rendeles_id}
                </th>
                <td class="px-6 py-4">
                    ${elem.kelt}
                </td>
                <td class="px-6 py-4">
                    ${elem.megrendelo}
                </td>
                <td class="px-6 py-4">
                    ${elem.statusz}
                </td>
                <td class="px-6 py-4">
                    <div class="px-4 py-3 text-right sm:px-6">
                        <button type="submit" class="inline-flex justify-center rounded-md bg-indigo-600 py-2 px-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Jóváhagyás</button>
                    </div>
                </td>
            </tr>
        `);
    }
}

export default AdminRendelesekView;