<x-base>
<section class="bg-white dark:bg-gray-900">
  <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
      <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Editar Noticia</h2>
      <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Tem algo de errado na noticia? Altere o necessario para ela ficar correta!</p>
      <form action="{{route('alteraNoticia', $noticia)}}" method="post" class="space-y-8">
        @csrf
          <div>
              <label for="titulo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Titulo</label>
              <input type="text" id="titulo" name = "titulo" value="{{$noticia->titulo}}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Escrever titulo" required>
          </div>
          <div>
              <label for="resumo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Resumo</label>
              <input type="text" id="resumo" name = "resumo" value="{{$noticia->resumo}}"  class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Escrever Resumo" required>
          </div>
          <div>
              <label for="capa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">URL da imagem</label>
              <input type="text" id="capa" name = "capa" value="{{$noticia->capa}}"  class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="URL" required>
          </div>
          <div class="sm:col-span-2">
              <label for="conteudo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Conteudo</label>
              <textarea id="conteudo" name= "conteudo" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Escrever noticia"> {{$noticia->conteudo}}" </textarea>
          </div>
          <a href = "{{route('cadastraNoticia')}}" class="border border-red-700 py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-blr-700 sm:w-fit hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Voltar</a>
          <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-blue-700 sm:w-fit hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Salvar</button>

        </form>
  </div>
</section>
</x-base>
