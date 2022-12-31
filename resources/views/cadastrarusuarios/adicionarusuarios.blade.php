<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form class="row gy-2 gx-3 align-items-center">
        <div class="col-6">
          <label class="visually-hidden" for="autoSizingInput">Name</label>
          <input type="text" class="form-control" id="autoSizingInput" placeholder="Nome...">
        </div>
        <div class="col-6">
          <label class="visually-hidden" for="autoSizingInputGroup">User Id</label>
          <div class="input-group">           
            <input type="text" class="form-control" id="autoSizingInputGroup" placeholder="Nome de usuário...">
          </div>
        </div>
        <div class="col-auto">
          <label class="visually-hidden" for="autoSizingSelect">Cargo</label>
          <select class="form-select" id="autoSizingSelect">
            <option selected>Choose...</option>
            <option value="1">Auditor</option>
            <option value="2">Gerente</option>
            <option value="3">Colaborador</option>
          </select>
        </div>
        <div class="col-auto">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="autoSizingCheck">
            <label class="form-check-label" for="autoSizingCheck">
              Remember me
            </label>
          </div>
        </div>
        <div class="col-auto">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
</body>
</html>