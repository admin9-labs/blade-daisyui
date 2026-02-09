# Breadcrumbs

DaisyUI [Breadcrumbs](https://daisyui.com/components/breadcrumbs/) 的 Blade 封装。

## 用法

```blade
<x-dui::breadcrumbs>
    <li><a href="/">Home</a></li>
    <li><a href="/docs">Documents</a></li>
    <li>Add Document</li>
</x-dui::breadcrumbs>
```

## Props

| Prop | Type | Default | Values |
|------|------|---------|--------|
| — | — | — | 无自定义 props，仅支持 slot 和标准 HTML 属性 |

## 示例

### 基础面包屑

```blade
<x-dui::breadcrumbs class="text-sm">
    <li><a href="/">Home</a></li>
    <li><a href="/docs">Documents</a></li>
    <li>Add Document</li>
</x-dui::breadcrumbs>
```

### 带图标的面包屑

```blade
<x-dui::breadcrumbs class="text-sm">
    <li>
        <a href="/" class="inline-flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="h-4 w-4 stroke-current">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
            </svg>
            Home
        </a>
    </li>
    <li><a href="/docs">Documents</a></li>
    <li>Add Document</li>
</x-dui::breadcrumbs>
```

### 限制最大宽度（可滚动）

```blade
<x-dui::breadcrumbs class="max-w-xs text-sm">
    <li>Long text 1</li>
    <li>Long text 2</li>
    <li>Long text 3</li>
    <li>Long text 4</li>
    <li>Long text 5</li>
</x-dui::breadcrumbs>
```

## 渲染结果

```html
<div class="breadcrumbs text-sm">
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/docs">Documents</a></li>
        <li>Add Document</li>
    </ul>
</div>
```
