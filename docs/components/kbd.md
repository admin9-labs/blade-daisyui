# Kbd

DaisyUI [Kbd](https://daisyui.com/components/kbd/) 的 Blade 封装。

## 用法

```blade
<x-dui::kbd>A</x-dui::kbd>
```

## Props

| Prop | Type | Default | Values |
|------|------|---------|--------|
| size | string\|null | null | xs, sm, md, lg, xl |

## 示例

### 基础键盘按键

```blade
<x-dui::kbd>A</x-dui::kbd>
```

### 不同尺寸

```blade
<x-dui::kbd size="lg">Shift</x-dui::kbd>
<x-dui::kbd size="md">Ctrl</x-dui::kbd>
<x-dui::kbd size="sm">Alt</x-dui::kbd>
<x-dui::kbd size="xs">Esc</x-dui::kbd>
```

### 组合快捷键

```blade
<x-dui::kbd>Ctrl</x-dui::kbd> + <x-dui::kbd>C</x-dui::kbd>
```

### 功能键组合

```blade
<x-dui::kbd>⌘</x-dui::kbd>
<x-dui::kbd>⌥</x-dui::kbd>
<x-dui::kbd>⇧</x-dui::kbd>
<x-dui::kbd>⌃</x-dui::kbd>
```

### 方向键

```blade
<div class="flex justify-center gap-1 w-full">
    <x-dui::kbd>▲</x-dui::kbd>
</div>
<div class="flex justify-center gap-1 w-full">
    <x-dui::kbd>◀︎</x-dui::kbd>
    <x-dui::kbd>▼</x-dui::kbd>
    <x-dui::kbd>▶︎</x-dui::kbd>
</div>
```

## 渲染结果

```html
<kbd class="kbd kbd-lg">Shift</kbd>
```
