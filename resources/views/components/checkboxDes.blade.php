
  <!-- Main modal -->
  <div id="des-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Voulez-vous desactiver la permission?
                </h3>
                <button a href="#"  type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="des-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
              <form action="" method="post">
               
                  @csrf
                  <button data-modal-hide="des-modal" type="submit" class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                      Oui
                   </button>
                   <a href=""  data-modal-hide="des-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Non</a>
              </form>
            </div>
            <!-- Modal footer -->
            
        </div>
    </div>
</div>

<script>
    function nonButton(event){

}
function Dlire(event){
  var route = document.querySelector('#d-lire')
  var form = document.querySelector('#des-modal form')
  form.setAttribute('action',route)
}  
function Denregistrer(event){
  var route = document.querySelector('#d-enregistrer')
  var form = document.querySelector('#des-modal form')
     form.setAttribute('action',route)
} 
function Dmodifier(event){
  var route = document.querySelector('#d-modifier')
 
  var form = document.querySelector('#des-modal form')
     form.setAttribute('action',route)
} 
function Dsupprimer(event){
  var route = document.querySelector('#d-supprimer')
  var form = document.querySelector('#des-modal form')
  form.setAttribute('action',route)
} 
</script>