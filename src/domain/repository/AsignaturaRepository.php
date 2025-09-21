<?php
namespace Domain\Repository;
use Domain\Model\Asignatura;

interface AsignaturaRepository {
    public function guardar(Asignatura $asignatura): void;
    public function buscarPorCodigo(string $codigo): ?Asignatura;
    public function listar(): array;
    public function actualizar(Asignatura $asignatura): void;
    public function eliminarPorCodigo(string $codigo): void;
}
