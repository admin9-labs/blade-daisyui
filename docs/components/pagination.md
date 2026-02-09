# Pagination

DaisyUI [Pagination](https://daisyui.com/components/pagination/) 的 Blade 封装。

## 用法

```blade
<x-dui::pagination>
    <button class="join-item btn">1</button>
    <button class="join-item btn btn-active">2</button>
    <button class="join-item btn">3</button>
</x-dui::pagination>
```

## Props

| Prop | Type | Default | Values |
|------|------|---------|--------|
| — | — | — | 无自定义 props，仅支持 slot 和标准 HTML 属性 |

> Pagination 组件基于 DaisyUI 的 `join` 组件，子元素需添加 `join-item` class。

## 示例

### 带活动按钮

```blade
<x-dui::pagination>
    <button class="join-item btn">1</button>
    <button class="join-item btn btn-active">2</button>
    <button class="join-item btn">3</button>
    <button class="join-item btn">4</button>
</x-dui::pagination>
```

### 带禁用按钮

```blade
<x-dui::pagination>
    <button class="join-item btn">1</button>
    <button class="join-item btn">2</button>
    <button class="join-item btn btn-disabled">...</button>
    <button class="join-item btn">99</button>
    <button class="join-item btn">100</button>
</x-dui::pagination>
```

### 上一页/下一页

```blade
<x-dui::pagination>
    <button class="join-item btn">«</button>
    <button class="join-item btn">Page 22</button>
    <button class="join-item btn">»</button>
</x-dui::pagination>
```

### 等宽 outline 按钮

```blade
<x-dui::pagination class="grid grid-cols-2">
    <button class="join-item btn btn-outline">Previous page</button>
    <button class="join-item btn btn-outline">Next</button>
</x-dui::pagination>
```

### 使用 radio 输入

```blade
<x-dui::pagination>
    <input class="join-item btn btn-square" type="radio" name="options" aria-label="1" checked />
    <input class="join-item btn btn-square" type="radio" name="options" aria-label="2" />
    <input class="join-item btn btn-square" type="radio" name="options" aria-label="3" />
    <input class="join-item btn btn-square" type="radio" name="options" aria-label="4" />
</x-dui::pagination>
```

## 渲染结果

```html
<div class="join">
    <button class="join-item btn">1</button>
    <button class="join-item btn btn-active">2</button>
    <button class="join-item btn">3</button>
    <button class="join-item btn">4</button>
</div>
```
