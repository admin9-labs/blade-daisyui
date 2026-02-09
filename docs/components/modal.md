# Modal

DaisyUI [Modal](https://daisyui.com/components/modal/) 的 Blade 封装。

## 用法

```blade
<button class="btn" onclick="my_modal.showModal()">open modal</button>
<x-dui::modal id="my_modal">
    <x-dui::modal.box>
        <h3 class="text-lg font-bold">Hello!</h3>
        <p class="py-4">Press ESC key or click the button below to close</p>
        <x-dui::modal.action>
            <form method="dialog">
                <button class="btn">Close</button>
            </form>
        </x-dui::modal.action>
    </x-dui::modal.box>
</x-dui::modal>
```

## Props

### modal (主组件)

| Prop | Type | Default | Values |
|------|------|---------|--------|
| open | bool | false | — |
| position | string | null | top, middle, bottom, start, end |
| id | string | null | 任意唯一 ID |

### modal.box (子组件)

无自定义 Props，自动添加 `modal-box` class。

### modal.action (子组件)

无自定义 Props，自动添加 `modal-action` class。

### modal.backdrop (子组件)

无自定义 Props，渲染为 `<form class="modal-backdrop" method="dialog">` 并包含一个关闭按钮。

## 子组件

- `<x-dui::modal.box>` - 模态框内容容器
- `<x-dui::modal.action>` - 模态框操作区域（按钮等）
- `<x-dui::modal.backdrop>` - 点击外部关闭的背景遮罩

## 示例

### 基础模态框

```blade
<button class="btn" onclick="my_modal_1.showModal()">open modal</button>
<x-dui::modal id="my_modal_1">
    <x-dui::modal.box>
        <h3 class="text-lg font-bold">Hello!</h3>
        <p class="py-4">Press ESC key or click the button below to close</p>
        <x-dui::modal.action>
            <form method="dialog">
                <button class="btn">Close</button>
            </form>
        </x-dui::modal.action>
    </x-dui::modal.box>
</x-dui::modal>
```

### 点击外部关闭

```blade
<button class="btn" onclick="my_modal_2.showModal()">open modal</button>
<x-dui::modal id="my_modal_2">
    <x-dui::modal.box>
        <h3 class="text-lg font-bold">Hello!</h3>
        <p class="py-4">Press ESC key or click outside to close</p>
    </x-dui::modal.box>
    <x-dui::modal.backdrop />
</x-dui::modal>
```

### 响应式位置

```blade
<x-dui::modal id="my_modal_3" position="bottom" class="sm:modal-middle">
    <x-dui::modal.box>
        <h3 class="text-lg font-bold">Hello!</h3>
        <p class="py-4">Modal goes bottom on SM, middle on MD</p>
        <x-dui::modal.action>
            <form method="dialog">
                <button class="btn">Close</button>
            </form>
        </x-dui::modal.action>
    </x-dui::modal.box>
</x-dui::modal>
```

### 强制打开

```blade
<x-dui::modal :open="true">
    <x-dui::modal.box>
        <p>This modal is always open</p>
    </x-dui::modal.box>
</x-dui::modal>
```

## 渲染结果

```html
<!-- 基础模态框 -->
<dialog id="my_modal" class="modal">
    <div class="modal-box">
        <h3 class="text-lg font-bold">Hello!</h3>
        <p class="py-4">Content</p>
        <div class="modal-action">
            <form method="dialog">
                <button class="btn">Close</button>
            </form>
        </div>
    </div>
</dialog>

<!-- 带背景遮罩 -->
<dialog id="my_modal" class="modal">
    <div class="modal-box">...</div>
    <form class="modal-backdrop" method="dialog">
        <button>close</button>
    </form>
</dialog>

<!-- 带位置 -->
<dialog class="modal modal-bottom">...</dialog>
```
