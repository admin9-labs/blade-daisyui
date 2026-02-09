# Theme Controller

DaisyUI [Theme Controller](https://daisyui.com/components/theme-controller/) 的 Blade 封装。

## 用法

```blade
<x-dui::theme-controller type="checkbox" value="synthwave" class="toggle" />
```

## Props

无自定义 Props。组件自动添加 `theme-controller` class，所有 HTML 属性通过 `$attributes` 透传。

常用 HTML 属性：

| 属性 | Type | 说明 |
|------|------|------|
| type | string | checkbox 或 radio |
| value | string | 主题名称（如 synthwave, retro, cyberpunk 等） |
| name | string | radio 分组名称 |
| aria-label | string | radio button 模式下的显示文本 |

> **关于外观 class**: Theme Controller 需要与其他 DaisyUI 组件的外观 class 组合使用（如 `toggle`、`radio`、`btn`、`join-item`），这是有意的跨组件组合模式，不属于封装泄漏。

## 示例

### Toggle 切换主题

```blade
<x-dui::theme-controller type="checkbox" value="synthwave" class="toggle" />
```

### 带文字标签的 Toggle

```blade
<label class="flex cursor-pointer gap-2">
    <span class="label-text">Default</span>
    <x-dui::theme-controller type="checkbox" value="synthwave" class="toggle" />
    <span class="label-text">Synthwave</span>
</label>
```

### Radio 选择主题

```blade
<fieldset class="fieldset">
    <label class="flex gap-2 cursor-pointer items-center">
        <x-dui::theme-controller type="radio" name="theme-radios" value="default" class="radio radio-sm" />
        Default
    </label>
    <label class="flex gap-2 cursor-pointer items-center">
        <x-dui::theme-controller type="radio" name="theme-radios" value="retro" class="radio radio-sm" />
        Retro
    </label>
    <label class="flex gap-2 cursor-pointer items-center">
        <x-dui::theme-controller type="radio" name="theme-radios" value="cyberpunk" class="radio radio-sm" />
        Cyberpunk
    </label>
</fieldset>
```

### Radio Button 样式

```blade
<div class="join join-vertical">
    <x-dui::theme-controller type="radio" name="theme-buttons" value="default" aria-label="Default" class="btn join-item" />
    <x-dui::theme-controller type="radio" name="theme-buttons" value="retro" aria-label="Retro" class="btn join-item" />
    <x-dui::theme-controller type="radio" name="theme-buttons" value="cyberpunk" aria-label="Cyberpunk" class="btn join-item" />
</div>
```

## 渲染结果

```html
<!-- Toggle -->
<input type="checkbox" value="synthwave" class="theme-controller toggle" />

<!-- Radio -->
<input type="radio" name="theme-radios" value="retro" class="theme-controller radio radio-sm" />

<!-- Radio Button -->
<input type="radio" name="theme-buttons" value="retro" aria-label="Retro" class="theme-controller btn join-item" />
```
