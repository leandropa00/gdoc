<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCategoriaProductoRequest;
use App\Http\Requests\UpdateCategoriaProductoRequest;
use App\Repositories\CategoriaProductoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CategoriaProductoController extends AppBaseController
{
    /** @var  CategoriaProductoRepository */
    private $categoriaProductoRepository;

    public function __construct(CategoriaProductoRepository $categoriaProductoRepo)
    {
        $this->categoriaProductoRepository = $categoriaProductoRepo;
    }

    /**
     * Display a listing of the CategoriaProducto.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $categoriaProductos = $this->categoriaProductoRepository->all();

        return view('categoria_productos.index')
            ->with('categoriaProductos', $categoriaProductos);
    }

    /**
     * Show the form for creating a new CategoriaProducto.
     *
     * @return Response
     */
    public function create()
    {
        return view('categoria_productos.create');
    }

    /**
     * Store a newly created CategoriaProducto in storage.
     *
     * @param CreateCategoriaProductoRequest $request
     *
     * @return Response
     */
    public function store(CreateCategoriaProductoRequest $request)
    {
        $input = $request->all();

        $categoriaProducto = $this->categoriaProductoRepository->create($input);

        Flash::success('Categoría creada satisfactoriamente.');
 
        return redirect(route('categoriaProductos.index'));
    }

    /**
     * Display the specified CategoriaProducto.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $categoriaProducto = $this->categoriaProductoRepository->find($id);

        if (empty($categoriaProducto)) {
            Flash::error('Categoría no encontrada');

            return redirect(route('categoriaProductos.index'));
        }

        return view('categoria_productos.show')->with('categoriaProducto', $categoriaProducto);
    }

    /**
     * Show the form for editing the specified CategoriaProducto.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $categoriaProducto = $this->categoriaProductoRepository->find($id);

        if (empty($categoriaProducto)) {
            Flash::error('Categoría no encontrada');

            return redirect(route('categoriaProductos.index'));
        }

        return view('categoria_productos.edit')->with('categoriaProducto', $categoriaProducto);
    }

    /**
     * Update the specified CategoriaProducto in storage.
     *
     * @param int $id
     * @param UpdateCategoriaProductoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCategoriaProductoRequest $request)
    {
        $categoriaProducto = $this->categoriaProductoRepository->find($id);

        if (empty($categoriaProducto)) {
            Flash::error('Categoría no encontrada');

            return redirect(route('categoriaProductos.index'));
        }

        $categoriaProducto = $this->categoriaProductoRepository->update($request->all(), $id);

        Flash::success('Categoría actualizada satisfactoriamente.');

        return redirect(route('categoriaProductos.index'));
    }

    /**
     * Remove the specified CategoriaProducto from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $categoriaProducto = $this->categoriaProductoRepository->find($id);

        if (empty($categoriaProducto)) {
            Flash::error('Categoría no encontrada');

            return redirect(route('categoriaProductos.index'));
        }

        $this->categoriaProductoRepository->delete($id);

        Flash::success('Categoría eliminada satisfactoriamente.');

        return redirect(route('categoriaProductos.index'));
    }
}
