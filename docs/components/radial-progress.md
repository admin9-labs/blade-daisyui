# Radial Progress

DaisyUI [Radial Progress](https://daisyui.com/components/radial-progress/) 的 Blade 封装。

## 用法

```blade
<x-dui::radial-progress :value="70">70%</x-dui::radial-progress>
```

## Props

| Prop | Type | Default | Values |
|------|------|---------|--------|
| value | int | 0 | 0-100 |
| size | string | null | CSS 尺寸值，如 `12rem`（默认 `5rem`） |
| thickness | string | null | CSS 尺寸值，如 `2px`、`2rem`（默认为 size 的 10%） |

> **注意**: Radial progress 使用 CSS 变量 `--value`、`--size`、`--thickness` 控制外观。组件会自动设置这些变量。

## 示例

### 基本用法
```blade
<x-dui::radial-progress :value="70">70%</x-dui::radial-progress>
```

### 不同进度值
```blade
<x-dui::radial-progress :value="0">0%</x-dui::radial-progress>
<x-dui::radial-progress :value="20">20%</x-dui::radial-progress>
<x-dui::radial-progress :value="60">60%</x-dui::radial-progress>
<x-dui::radial-progress :value="80">80%</x-dui::radial-progress>
<x-dui::radial-progress :value="100">100%</x-dui::radial-progress>
```

### 自定义颜色
```blade
<x-dui::radial-progress :value="70" class="text-primary">70%</x-dui::radial-progress>
<x-dui::radial-progress :value="70" class="bg-primary text-primary-content border-4 border-primary">70%</x-dui::radial-progress>
```

### 自定义尺寸和厚度
```blade
<x-dui::radial-progress :value="70" size="12rem" thickness="2px">70%</x-dui::radial-progress>
<x-dui::radial-progress :value="70" size="12rem" thickness="2rem">70%</x-dui::radial-progress>
```

## 渲染结果
```html
<div class="radial-progress" style="--value:70; --size:12rem; --thickness:2px;" role="progressbar" aria-valuenow="70">70%</div>
```
