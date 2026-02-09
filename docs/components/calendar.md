# Calendar

DaisyUI [Calendar](https://daisyui.com/components/calendar/) 的 Blade 封装。

## 用法

`<x-dui::calendar>` 是透传组件，不添加包裹 div。`cally` 等日历库 class 应直接添加到 `<calendar-date>` 或 `<calendar-range>` 等 Web Component 元素上。

```blade
<x-dui::calendar>
    <calendar-range class="cally bg-base-100 border border-base-300 rounded-box shadow-lg">
        <calendar-month></calendar-month>
    </calendar-range>
</x-dui::calendar>
```

## Props

| Prop | Type | Default | Values |
|------|------|---------|--------|
| library | string | 'cally' | cally 或其他日历库名称（保留供未来使用） |

## 示例

### 基础日历

```blade
<x-dui::calendar>
    <calendar-range class="cally bg-base-100 border border-base-300 rounded-box shadow-lg">
        <calendar-month></calendar-month>
    </calendar-range>
</x-dui::calendar>
```

### 单日期选择

```blade
<x-dui::calendar>
    <calendar-date class="cally bg-base-100 border border-base-300 rounded-box shadow-lg">
        <calendar-month></calendar-month>
    </calendar-date>
</x-dui::calendar>
```

## 渲染结果

```html
<calendar-range class="cally bg-base-100 border border-base-300 rounded-box shadow-lg">
    <calendar-month></calendar-month>
</calendar-range>
```
