@extends('admin.layouts.app')

@section('content')
      <!-- Main Content -->
        <section class="section">
          <div class="section-header">
            <h1>產品類別</h1>
          </div>

          <div class="section-body">

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>新增</h4>

                  </div>
                  <div class="card-body">
                    <form action="{{route('admin.product.category.store')}}" method="POST">
                        @csrf
                        <!-- <div class="form-group">
                            <label>Icon</label>
                             <div>
                                <button class="btn btn-primary" data-icon="" data-selected-class="btn-danger"
                                data-unselected-class="btn-info" role="iconpicker" name="icon"></button>
                             </div>

                        </div> -->
                        <div class="form-group">
                            <label>類別名稱</label>
                            <input type="text" class="form-control" name="name" value="">
                        </div>
                        <div class="form-group">
                            <label for="inputState">狀態</label>
                            <select id="inputState" class="form-control" name="status">
                              <option value="1">啟用</option>
                              <option value="0">停用</option>
                            </select>
                        </div>
                        <div class="row ">
                            <div class="col-6 text-end">
                                <button type="submit" class="btn btn-primary">
                                    更新
                                </button>
                            </div>
                            <div class="col-6">
                                <a href="{{ route('admin.product.category.index') }}" class="btn btn-secondary">
                                        取消
                                </a>
                            </div>
                        </div>
                    </form>
                  </div>

                </div>
              </div>
            </div>

          </div>
        </section>

@endsection
