# Hover 3D

DaisyUI [Hover 3D](https://daisyui.com/components/hover-3d/) 的 Blade 封装。

## 用法

```blade
<x-dui::hover-3d>
    <img src="/img/photo.jpg" alt="3D 悬停效果" />
</x-dui::hover-3d>
```

## Props

无额外 Props。

> **注意**: 组件会自动在内容后追加 8 个空 `<div>` 元素，用于实现 3D 悬停效果的鼠标检测区域。仅在组件内放置非交互内容（如图片、卡片）。

## 示例

### 基础 3D 悬停

```blade
<x-dui::hover-3d class="w-64">
    <img src="/img/photo.jpg" alt="3D 悬停效果" class="rounded-box" />
</x-dui::hover-3d>
```

### 卡片 3D 悬停

```blade
<x-dui::hover-3d>
    <div class="card bg-base-100 shadow-xl w-64">
        <figure>
            <img src="/img/photo.jpg" alt="封面" />
        </figure>
        <div class="card-body">
            <h2 class="card-title">3D 卡片</h2>
            <p>鼠标悬停查看 3D 效果。</p>
        </div>
    </div>
</x-dui::hover-3d>
```

## 渲染结果

```html
<div class="hover-3d">
    <img src="/img/photo.jpg" alt="3D 悬停效果" />
    <div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
</div>
```
