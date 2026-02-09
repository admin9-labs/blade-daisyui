# Dropdown

DaisyUI [Dropdown](https://daisyui.com/components/dropdown/) 的 Blade 封装。

## 用法

```blade
<x-dui::dropdown>
    <div tabindex="0" role="button" class="btn m-1">Click</div>
    <x-dui::dropdown.content class="menu bg-base-100 rounded-box z-1 w-52 p-2 shadow-sm">
        <li><a>Item 1</a></li>
        <li><a>Item 2</a></li>
    </x-dui::dropdown.content>
</x-dui::dropdown>
```

## Props

### dropdown (主组件)

| Prop | Type | Default | Values |
|------|------|---------|--------|
| position | string | null | start, center, end, top, bottom, left, right |
| hover | bool | false | — |
| open | bool | false | — |
| close | bool | false | — |

### dropdown.content (子组件)

无自定义 Props，自动添加 `dropdown-content` class 和 `tabindex="-1"`。

## 子组件

- `<x-dui::dropdown.content>` - 下拉内容容器

## 示例

### 基础下拉菜单

```blade
<x-dui::dropdown>
    <div tabindex="0" role="button" class="btn m-1">Click</div>
    <x-dui::dropdown.content class="menu bg-base-100 rounded-box z-1 w-52 p-2 shadow-sm">
        <li><a>Item 1</a></li>
        <li><a>Item 2</a></li>
    </x-dui::dropdown.content>
</x-dui::dropdown>
```

### 位置

```blade
<x-dui::dropdown position="end">
    <div tabindex="0" role="button" class="btn m-1">Click</div>
    <x-dui::dropdown.content class="menu bg-base-100 rounded-box z-1 w-52 p-2 shadow-sm">
        <li><a>Item 1</a></li>
    </x-dui::dropdown.content>
</x-dui::dropdown>

<x-dui::dropdown position="top">
    <div tabindex="0" role="button" class="btn m-1">Click</div>
    <x-dui::dropdown.content class="menu bg-base-100 rounded-box z-1 w-52 p-2 shadow-sm">
        <li><a>Item 1</a></li>
    </x-dui::dropdown.content>
</x-dui::dropdown>
```

### 悬停打开

```blade
<x-dui::dropdown :hover="true">
    <div tabindex="0" role="button" class="btn m-1">Hover</div>
    <x-dui::dropdown.content class="menu bg-base-100 rounded-box z-1 w-52 p-2 shadow-sm">
        <li><a>Item 1</a></li>
    </x-dui::dropdown.content>
</x-dui::dropdown>
```

### 强制打开

```blade
<x-dui::dropdown :open="true">
    <div tabindex="0" role="button" class="btn m-1">Button</div>
    <x-dui::dropdown.content class="menu bg-base-100 rounded-box z-1 w-52 p-2 shadow-sm">
        <li><a>Item 1</a></li>
    </x-dui::dropdown.content>
</x-dui::dropdown>
```

### 点击外部关闭

```blade
<x-dui::dropdown :close="true">
    <div tabindex="0" role="button" class="btn m-1">Click</div>
    <x-dui::dropdown.content class="menu bg-base-100 rounded-box z-1 w-52 p-2 shadow-sm">
        <li><a>Item 1</a></li>
    </x-dui::dropdown.content>
</x-dui::dropdown>
```

## 渲染结果

```html
<!-- 基础 -->
<div class="dropdown">
    <div tabindex="0" role="button" class="btn m-1">Click</div>
    <div class="dropdown-content menu bg-base-100 rounded-box z-1 w-52 p-2 shadow-sm" tabindex="-1">
        <li><a>Item 1</a></li>
    </div>
</div>

<!-- 带位置和悬停 -->
<div class="dropdown dropdown-end dropdown-hover">
    ...
</div>
```
