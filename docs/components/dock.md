# Dock

DaisyUI [Dock](https://daisyui.com/components/dock/) 的 Blade 封装。

## 用法

```blade
<x-dui::dock>
    <button>
        <svg>...</svg>
        <x-dui::dock.label>Home</x-dui::dock.label>
    </button>
</x-dui::dock>
```

## Props

| Prop | Type | Default | Values |
|------|------|---------|--------|
| size | string | null | xs, sm, md, lg, xl |

## 子组件

### `<x-dui::dock.item>`

单个 Dock 项，渲染为 `<button>`，自动处理 `dock-active` class。

| Prop | Type | Default | Values |
|------|------|---------|--------|
| active | bool | false | — |

### `<x-dui::dock.label>`

Dock 项目的文本标签。

| Prop | Type | Default | Values |
|------|------|---------|--------|
| — | — | — | 无自定义 props |

## 示例

### 基础 Dock（使用 dock.item）

```blade
<x-dui::dock>
    <x-dui::dock.item>
        <svg class="size-[1.2em]">...</svg>
        <x-dui::dock.label>Home</x-dui::dock.label>
    </x-dui::dock.item>
    <x-dui::dock.item :active="true">
        <svg class="size-[1.2em]">...</svg>
        <x-dui::dock.label>Inbox</x-dui::dock.label>
    </x-dui::dock.item>
    <x-dui::dock.item>
        <svg class="size-[1.2em]">...</svg>
        <x-dui::dock.label>Settings</x-dui::dock.label>
    </x-dui::dock.item>
</x-dui::dock>
```

### 基础 Dock（旧用法）

```blade
<x-dui::dock>
    <button>
        <svg class="size-[1.2em]">...</svg>
        <x-dui::dock.label>Home</x-dui::dock.label>
    </button>
    <button class="dock-active">
        <svg class="size-[1.2em]">...</svg>
        <x-dui::dock.label>Inbox</x-dui::dock.label>
    </button>
    <button>
        <svg class="size-[1.2em]">...</svg>
        <x-dui::dock.label>Settings</x-dui::dock.label>
    </button>
</x-dui::dock>
```

### 不同尺寸

```blade
<x-dui::dock size="xs">
    <button><svg>...</svg></button>
    <button class="dock-active"><svg>...</svg></button>
    <button><svg>...</svg></button>
</x-dui::dock>

<x-dui::dock size="lg">
    <button>
        <svg>...</svg>
        <x-dui::dock.label>Home</x-dui::dock.label>
    </button>
    <button class="dock-active">
        <svg>...</svg>
        <x-dui::dock.label>Inbox</x-dui::dock.label>
    </button>
</x-dui::dock>
```

### 自定义颜色

```blade
<x-dui::dock class="bg-neutral text-neutral-content">
    <button>
        <svg>...</svg>
        <x-dui::dock.label>Home</x-dui::dock.label>
    </button>
    <button class="dock-active">
        <svg>...</svg>
        <x-dui::dock.label>Inbox</x-dui::dock.label>
    </button>
</x-dui::dock>
```

## 渲染结果

```html
<div class="dock dock-lg">
    <button>
        <svg>...</svg>
        <span class="dock-label">Home</span>
    </button>
    <button class="dock-active">
        <svg>...</svg>
        <span class="dock-label">Inbox</span>
    </button>
</div>
```
