<h1>Tareas propias</h1>
<ul>
  @foreach ($user->ownerTodo as $todo)
    <li>
      {{$todo->name}}
    </li>
  @endforeach
</ul>

<h1>Tareas asignadas</h1>
<ul>
    @foreach ($user->collaboratingTodos as $todo)
      <li>
        {{$todo->name}}
      </li>
    @endforeach
</ul>