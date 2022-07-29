@extends('layouts.header-footer')
@section('title', 'Add project')
@section('contents')
    <div class="field__editAndBack">
        <button class="component__button component__button--redirect" id="project__button--add" type="button">All projects</button>
        <x-submit-btn title="Add project" form="form__project--add" id="project__button--edit" style="normal">
            <ion-icon name="bookmark-outline"></ion-icon>
        </x-submit-btn>
    </div>
    <div class="project__viewport">
        <div class="project__body--left">
            <x-post-form url="/projects/add/project" id="form__project--add">
                <div id="project__content--information">
                    <div class="project__content--left">
                        <div id="project__information--content">
                            <div class="project__title--combo">
                                <label class="required__star" for="leftContent__project--title">Tiêu đề</label>
                                <textarea name="project_name" id="leftContent__projectAdd--title" placeholder="Tên sản phẩm" spellcheck="false" required></textarea>
                                <label for="leftContent__project--type">Thể loại</label>
                                <select name="project_type" id="leftContent__projectAdd--type">
                                    <option value="Không xác định">Không xác định</option>
                                    <option value="Đất đai">Đất đai</option>
                                    <option value="Công trình">Công trình</option>
                                </select>
                            </div>
                            <label for="leftContent__project--description">Mô tả</label>
                            <textarea name="project_description" id="leftContent__projectAdd--description" placeholder="Giới thiệu qua về sản phẩm" spellcheck="false"></textarea>
                            <label for="project__image--big">Ảnh đại diện</label><br>
                            <input name="source" id="project__projectAddimage--big" type="text" placeholder="Hãy chèn link ảnh tại đây." alt="">
                        </div>
                    </div>
                    <div id="div__embed--fixed">
                        <div class="project__content--right">
                            <div class="projectAdd__information--detail">
                                <label class="required__star" for="project__price--add">Giá</label>
                                <input name="price" type="text" id="project__price--add" placeholder="Nên ghi số + chữ rút gọn" spellcheck="false" required>
                            </div>
                            <div class="projectAdd__information--detail">
                                <label for="project__address--add">Địa chỉ</label>
                                <textarea name="project_address" id="project__address--add" placeholder="Vị trí của sản phẩm" spellcheck="false"></textarea>
                            </div>
                            <div class="projectAdd__information--detail">
                                <label for="project__area--add">Diện tích</label>
                                <input name="project_acreage" id="project__area--add" type="text" placeholder="Chiều dài x chiều rộng" spellcheck="false">
                            </div>
                            <div class="projectAdd__information--detail">
                                <label for="project__tip--add">Hoa hồng</label>
                                <input name="project_tip" id="project__tip--add" type="text" placeholder="Phí boa cho người giới thiệu" spellcheck="false">
                            </div>
                        </div>
                    </div>
                </div>
            </x-post-form>
        </div>
        <div id="projectAdd__demo--image">

        </div>
    </div>
@endsection
